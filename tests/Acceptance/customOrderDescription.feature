Feature: Customize Order with Description
	As a registered user of the system
	In order to customize my order with a description
	I want to be able to provide a description of my order during the checkout process

	Scenario: Adding a description to an order
		Given I am logged into the system and I have items in my cart
		When I am on the "Checkout" page
		And I enter a description of my order in the "Order Description" field
		And I complete the checkout process
		Then the order should be placed with the provided description
		And the description should be included in the order confirmation email
		And the description should be displayed on the order details page

	Scenario: Leaving the "Order Description" field blank
		Given I am logged into the system and I have items in my cart
		When I am on the "Checkout" page
		And I leave the "Order Description" field blank
		And I complete the checkout process
		Then the order should be placed without a description
		And the order confirmation email should not include a description
		And the order details page should not display a description