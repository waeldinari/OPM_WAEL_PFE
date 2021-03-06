<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator\Tests\Constraints;

use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Validator\Constraints\Expression;
use Symfony\Component\Validator\Constraints\ExpressionValidator;
use Symfony\Component\Validator\Tests\Fixtures\Entity;
use Symfony\Component\Validator\Validation;

class ExpressionValidatorTest extends AbstractConstraintValidatorTest
{
    protected function getApiVersion()
    {
        return Validation::API_VERSION_2_5;
    }

    protected function createValidator()
    {
        return new ExpressionValidator(PropertyAccess::createPropertyAccessor());
    }

    public function testExpressionIsEvaluatedWithNullValue()
    {
        $constraint = new Expression(array(
            'expression' => 'false',
            'message' => 'myMessage',
        ));

        $this->validator->validate(null, $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', 'null')
            ->assertRaised();
    }

    public function testExpressionIsEvaluatedWithEmptyStringValue()
    {
        $constraint = new Expression(array(
            'expression' => 'false',
            'message' => 'myMessage',
        ));

        $this->validator->validate('', $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '""')
            ->assertRaised();
    }

    public function testSucceedingExpressionAtObjectLevel()
    {
        $constraint = new Expression('this.data == 1');

        $object = new Entity();
        $object->data = '1';

        $this->setObject($object);

        $this->validator->validate($object, $constraint);

        $this->assertNoViolation();
    }

    public function testFailingExpressionAtObjectLevel()
    {
        $constraint = new Expression(array(
            'expression' => 'this.data == 1',
            'message' => 'myMessage',
        ));

        $object = new Entity();
        $object->data = '2';

        $this->setObject($object);

        $this->validator->validate($object, $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', 'object')
            ->assertRaised();
    }

    public function testSucceedingExpressionAtPropertyLevel()
    {
        $constraint = new Expression('value == this.data');

        $object = new Entity();
        $object->data = '1';

        $this->setRoot($object);
        $this->setPropertyPath('data');
        $this->setProperty($object, 'data');

        $this->validator->validate('1', $constraint);

        $this->assertNoViolation();
    }

    public function testFailingExpressionAtPropertyLevel()
    {
        $constraint = new Expression(array(
            'expression' => 'value == this.data',
            'message' => 'myMessage',
        ));

        $object = new Entity();
        $object->data = '1';

        $this->setRoot($object);
        $this->setPropertyPath('data');
        $this->setProperty($object, 'data');

        $this->validator->validate('2', $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '"2"')
            ->atPath('data')
            ->assertRaised();
    }

    public function testSucceedingExpressionAtNestedPropertyLevel()
    {
        $constraint = new Expression('value == this.data');

        $object = new Entity();
        $object->data = '1';

        $root = new Entity();
        $root->reference = $object;

        $this->setRoot($root);
        $this->setPropertyPath('reference.data');
        $this->setProperty($object, 'data');

        $this->validator->validate('1', $constraint);

        $this->assertNoViolation();
    }

    public function testFailingExpressionAtNestedPropertyLevel()
    {
        $constraint = new Expression(array(
            'expression' => 'value == this.data',
            'message' => 'myMessage',
        ));

        $object = new Entity();
        $object->data = '1';

        $root = new Entity();
        $root->reference = $object;

        $this->setRoot($root);
        $this->setPropertyPath('reference.data');
        $this->setProperty($object, 'data');

        $this->validator->validate('2', $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '"2"')
            ->atPath('reference.data')
            ->assertRaised();
    }

    /**
     * When validatePropertyValue() is called with a class name
     * https://github.com/symfony/symfony/pull/11498
     */
    public function testSucceedingExpressionAtPropertyLevelWithoutRoot()
    {
        $constraint = new Expression('value == "1"');

        $this->setRoot('1');
        $this->setPropertyPath('');
        $this->setProperty(null, 'property');

        $this->validator->validate('1', $constraint);

        $this->assertNoViolation();
    }

    /**
     * When validatePropertyValue() is called with a class name
     * https://github.com/symfony/symfony/pull/11498
     */
    public function testFailingExpressionAtPropertyLevelWithoutRoot()
    {
        $constraint = new Expression(array(
            'expression' => 'value == "1"',
            'message' => 'myMessage',
        ));

        $this->setRoot('2');
        $this->setPropertyPath('');
        $this->setProperty(null, 'property');

        $this->validator->validate('2', $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '"2"')
            ->atPath('')
            ->assertRaised();
    }
}
