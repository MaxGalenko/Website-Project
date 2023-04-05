Feature: Edit About Us Page
	In order to edit the About Us Page
	As a Admin of the system
	I want to be able edit the page and get the results

	Scenario: Editing the about us page
		Given I am logged into the system with admin status
		When I click on "edit" on the "About us" page
		And I fill up the "form" provided
		And I click "save"
		Then I see the page with changes applied

	Scenario: Cancelling editing the about us page
		Given I am logged into the system with admin status
		When I click on "edit" on the "About us" page
		And I fill up the "form" provided
		And I click "cancel"
		Then I see the "form" disappear

	Scenario: Editing the about us page with empty forms
		Given I am logged into the system with admin status
		When I click on "edit" on the "About us" page
		And I don't fill up the "form" provided
		And I click "save"
		Then I see a "Please fill up missing blanks to edit page" prompt