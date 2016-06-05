<?php
namespace CFlashMessage;
class CFlashMessageTest extends \PHPUnit_Framework_TestCase
{
   /**
    * @runInSeparateProcess
    */
   public function testAddError() {
       $fm = new \CFlashMessage\CFlashMessage();
       $fm->addError('testError');
       $res = $fm->getFlashMessages();
       $exp = "<div id='flashMessage' class='error'>testError</div>";
       $this->assertEquals($res, $exp, "HTML flash message missmatch.");
   }
   /**
    * @runInSeparateProcess
    */
   public function testAddSuccess() {
       $fm = new \CFlashMessage\CFlashMessage();
       $fm->addSuccess('testSuccess');
       $res = $fm->getFlashMessages();
       $exp = "<div id='flashMessage' class='success'>testSuccess</div>";
       $this->assertEquals($res, $exp, "HTML flash message missmatch.");
   }
   /**
    * @runInSeparateProcess
    */
   public function testAddInfo() {
       $fm = new \CFlashMessage\CFlashMessage();
       $fm->addInfo('testInfo');
       $res = $fm->getFlashMessages();
       $exp = "<div id='flashMessage' class='info'>testInfo</div>";
       $this->assertEquals($res, $exp, "HTML flash message missmatch.");
   }
   /**
    * @runInSeparateProcess
    */
   public function testAddWarning() {
       $fm = new \CFlashMessage\CFlashMessage();
       $fm->addWarning('testWarning');
       $res = $fm->getFlashMessages();
       $exp = "<div id='flashMessage' class='warning'>testWarning</div>";
       $this->assertEquals($res, $exp, "HTML flash message missmatch.");
   }
   /**
    * @runInSeparateProcess
    */
   public function testGetFlashMessages() {
       $fm = new \FlashMessage\CFlashMessage();
       $res = $fm->getFlashMessages();
       $exp = null;
       $this->assertEquals($res, $exp, "HTML flash message missmatch.");
   }
}