Feature: Contact Admin
	In order to contact the admin
	As a registered user of the system
	I want to be able to send messages

	Scenario: Sending a message
		Given I am logged into the system
		When I click on "messages" in the "Menu" bar
		And I fill the "form" provided
		And I click "send"
		Then I see the message get send to the admin

	Scenario: Cancelling a message
		Given I am logged into the system
		When I click on "messages" in the "Menu" bar
		And I fill up the "form" provided
		And I click "cancel"
		Then I go back to the "Landing page"
		
	Scenario: Sending empty message
		Given I am logged into the system
		When I click on "messages" in the "Menu" bar
		And I don't fill up the "form" provided
		And I click "send"
		Then I see a "Please fill up the form" prompt