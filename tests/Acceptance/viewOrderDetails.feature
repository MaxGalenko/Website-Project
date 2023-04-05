Feature: Viewing the Order Details
	In order view the order details for an order
	As a Admin of the system
	I want to be able to details of an order

	Scenario: Viewing the details of an order
		Given I am logged into the system with admin status
		When I click on "Order" on the "Menu"
		Then I see a list of "Orders"
		When I click on a specific order 
		Then I see a textbox with the details of that order