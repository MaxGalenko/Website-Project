Feature: Edit About Us Page
	In order to edit the About Us Page
	As a Admin of the system
	I want to be able edit the page and get the results

	Scenario: Editing the about us page
		Given I am on "http://localhost/" page
		When I click ".bi-door-closed"
		Then I am on "http://localhost/User/index" page
		And I input "bananaking" in "username"
		And I input "12345" in "password"
		And I click "action"
		Then I am on "http://localhost/Main/index" page
		And I click "About Us"
		Then I am on "http://localhost/About/index" page
		And I click ".btn-default"
		Then I am on "http://localhost/About/edit" page
		And I input "Why in the world is this not working" in "about_text"
		And I click "action"
		Then I see "Why"