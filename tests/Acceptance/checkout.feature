Feature: Credit/Debit Card Checkout
	In order to purchase products using a credit/debit card or PayPal
	As a user
	I want to be able to checkout with a credit/debit card or PayPal

	Scenario: Checkout with a Credit Card
		Given I have added item(s) to my cart
		When I proceed to checkout
		And select "Credit Card" as my payment method
		Then I should be prompted to enter my credit card details
		And I should see the total cost of my order
		And I should be able to submit my order

	Scenario: Checkout with a Debit Card
		Given I have added item(s) to my cart
		When I proceed to checkout
		And select "Debit Card" as my payment method
		Then I should be prompted to enter my debit card details
		And I should see the total cost of my order
		And I should be able to submit my order

	Scenario: Checkout with PayPal
		Given I have added item(s) to my cart
		When I proceed to checkout
		And select "PayPal" as my payment method
		Then I should be redirected to the PayPal website
		And prompted to log in to my PayPal account
		And I should see the total cost of my order
		And I should be able to submit my order

	Scenario: Payment Validation
		Given I am on the checkout page
		When I enter invalid credit/debit card or PayPal account information
		Then I should see an error message indicating the issue
		And I should not be able to submit my order

	Scenario: Order Confirmation
		Given I have submitted my order using a credit/debit card or a PayPal
		When my payment is processed successfully
		Then I should see a confirmation message
		And I should receive an email with the order details and confirmation number.