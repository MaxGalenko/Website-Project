Feature: View Orders
	In order to manage orders efficiently
	As an Admin
	I want to view all orders

	Scenario: View all Orders
		Given I am logged in as an Admin
		When I go to the "Orders" page
		Then I should see a list of all orders in progress
		And I should see the following details for each order: order number, customer name, order status, and total amount.

	Scenario: View Order Details
		Given I am logged in as an Admin
		When I click on an order from the "Orders" page
		Then I should see the order details including customer name, shipping address, order date, payment details, and a list of products ordered
		And I should see the order status and total amount.