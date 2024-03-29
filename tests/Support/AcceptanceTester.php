<?php

declare(strict_types=1);

namespace Tests\Support;

/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * Define custom actions here
     */

    // General Code

    public function cookies() {
        $this->setCookie('lang', 'en');
        $this->setCookie('TZ', 'America/Toronto');
    }

    /**
    * @When I input :arg1 in :arg2
    */
    public function iInputIn($value, $fieldname)
    {
        $this->cookies();
        $this->fillField($fieldname, $value);
    }

    /**
     * @Then I see :text
     */
    public function iSee($text)
    {
        $this->cookies();
        $this->see($text);
    }

    /**
     * @Then I don't see :text
     */
    public function iDontSee($text)
    {
        $this->cookies();
        $this->dontSee($text);
    }


     /**
     * @Given I am on :url page
     */
    public function iAmOnPage($url)
    {
        $this->cookies();
        $this->amOnPage($url);
    }

   /**
    * @When I click :arg1
    */
    public function iClick($arg1)
    {
        $this->cookies();
        $this->click($arg1);
    }


}
