Feature: Changing Language
	In order to change the language of the page
	As a registered user of the system
	I want to be able to the language and get the translated results

	Scenario: Changing the language to "ar"
		Given I am logged into the system
		When I click "ar" in the language setting in the "Menu" bar
		Then I see all pages translated in Arabic