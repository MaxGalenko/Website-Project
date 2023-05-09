Feature: View Profile
	In order to view profile
	As a registered user of the system
	I want to be able to view profile

	Scenario: Viewing the profile as customer
		Given I am on "http://localhost/" page
		When I click ".bi-door-closed"
		Then I am on "http://localhost/User/index" page
		And I input "banana2" in "username"
		And I input "123" in "password"
		And I click "action"
		Then I am on "http://localhost/Main/index" page
		And I click "#profileStuff"
		Then I am on "http://localhost/Profile/index" page
		And I see "Rice"
		And I see "Crispies"
		And I see "Nullitity"
		And I see "Amazing"
		And I see "World"
		And I see "ofGumball"