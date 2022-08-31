--TEST--
phpunit --testdox-xml php://stdout ../../_files/StatusTest.php
--XFAIL--
TestDox logging has not been migrated to events yet.
See https://github.com/sebastianbergmann/phpunit/issues/4702 for details.
--FILE--
<?php declare(strict_types=1);
$output = tempnam(sys_get_temp_dir(), __FILE__);

$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--no-output';
$_SERVER['argv'][] = '--testdox-xml';
$_SERVER['argv'][] = $output;
$_SERVER['argv'][] = __DIR__ . '/../_files/basic/unit/StatusTest.php';

require_once __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Application::main(false);

print file_get_contents($output);

unlink($output);
--EXPECTF--
<?xml version="1.0" encoding="UTF-8"?>
<tests>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testSuccess" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Success" status="success" time="%s" size="unknown">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
    <testDouble type="PHPUnit\TestFixture\MockObject\AnInterface"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testFailure" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Failure" status="failure" time="%s" size="unknown" exceptionLine="%d" exceptionMessage="Failed asserting that false is true.">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testError" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Error" status="error" time="%s" size="unknown" exceptionMessage="">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testIncomplete" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Incomplete" status="incomplete" time="%s" size="unknown">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testSkipped" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Skipped" status="skipped" time="%s" size="unknown">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testRisky" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Risky" status="risky" time="%s" size="unknown">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testWarning" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Warning" status="warning" time="%s" size="unknown">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testSuccessWithMessage" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Success with message" status="success" time="%s" size="unknown">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testFailureWithMessage" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Failure with message" status="failure" time="%s" size="unknown" exceptionLine="%d" exceptionMessage="failure with custom message&#10;Failed asserting that false is true.">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testErrorWithMessage" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Error with message" status="error" time="%s" size="unknown" exceptionMessage="error with custom message">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testIncompleteWithMessage" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Incomplete with message" status="incomplete" time="%s" size="unknown">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testSkippedWithMessage" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Skipped with message" status="skipped" time="%s" size="unknown">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testRiskyWithMessage" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Risky with message" status="risky" time="%s" size="unknown">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
  <test className="PHPUnit\SelfTest\Basic\StatusTest" methodName="testWarningWithMessage" prettifiedClassName="Test result status with and without message" prettifiedMethodName="Warning with message" status="warning" time="%s" size="unknown">
    <group name="default"/>
    <covers target="Foo"/>
    <uses target="Bar"/>
  </test>
</tests>
