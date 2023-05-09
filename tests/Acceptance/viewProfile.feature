Feature: View Profile
	In order to view profile
	As a registered user of the system
	I want to be able to view profile

	Scenario: Viewing the profile
		Given I am on "http://localhost/"
		When I click on "Profile" on the "Menu"
		Then I see my "Profile"