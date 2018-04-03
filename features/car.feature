Feature: Ican create an amazing car
  In order to own a great car
  As a customer
  I need need to create my car without problems

  Scenario: Car can be constructed
    Given A new car
    Then Car is constructed

  Scenario: Car must have "4" weels
    Given a new car
    Then Car has four weels

  Scenario: A red car must be a Ferrari
    # User action
    Given A new car
    # Only user action
    When I choose "red" color
    # Result
    Then It is a "ferrari"