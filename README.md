
# Hammock Tech Test

Hammock is the property finance platform for UK landlords. We provide banking, bookkeeping, and insights to save landlords time and money.

In order to let out a property a landlord is required to get an Energy Performance Certificate (EPC) in order to inform potential tenants of the energy efficiency of the property. 

The EPC takes into account a number of different features of the property, gives a score and provides recommendations of how to improve the energy efficiency of the property.

This technical test is a simple application that allows the user to search for an EPC for a given property.

## How to set up the application

The application is built using [Laravel](https://laravel.com/docs/9.x), [Livewire](https://laravel-livewire.com/) and [Bootstrap](https://getbootstrap.com/docs/4.0/getting-started/introduction/).

It is the same stack we use at Hammock so should be as close to a real-world scenario as possible.

There are five steps to get the app to run

1. Fork the repository and clone to your local machine. Instructions [here](https://docs.github.com/en/github-ae@latest/get-started/quickstart/fork-a-repo#forking-a-repository)
2. Copy the environment file `cp .env.example .env`
3. Install dependencies `composer install && npm install && npm run dev`
4. Generate the app key `php artisan key:generate`
5. Open the correct directory in your terminal and run `php artisan serve`.

This will start a web server and the site will be accessible [here](http://localhost:8000/)

If you do not have php installed on your machine or have issues getting it to work please let us know as there are other options including a docker based environment or a web based IDE.

We want to assess your skills as a developer, not how well you can set up a development environment.

Once you have made your changes, push them and make a pull request for us to review your code.

## What we would like you to do

The purpose of the site is to make it easy for someone to look up the EPC for their property and get the recommendations associated with it.

In basic terms we would like you to enhance the functionality of the application (make it easy to use) and improve the code quality of the underlying application.

There are a number of different ways you could do this, the following list is intended to give you a choice of what you would like to build. 

**We do not expect you to complete all of these**. 

### As a basic requirement we would like you to

- Improve the quality of the OpenDataCommunitiesService
- Add the ability to search using the first line of the address as well as the postcode

### These other goals are nice to haves but not essential, tackle them if you have time but don't worry if you do not.

- Give the user a list of all EPC's for a property and allow them to select a specific one to look at
- Represent the EPC data in an easier to read format than it is currently
- Fetch the [recommendations](https://epc.opendatacommunities.org/docs/api/domestic#domestic-recommendations) for a specified EPC certificate.
- Test the [service](https://laravel.com/docs/9.x/testing) and the [Livewire](https://laravel-livewire.com/docs/2.x/testing) components 
  
We are more interested in the quality of the changes you have made rather than the number of changes.Aim to spend about an hour and please do not spend more than 2 hours on the task.

Please document your changes and the reasons you made them in the readme below

## About the API
The Open Data Communities EPC api provides open access to the official EPC register. 

It is free to use and is the official record of EPC's provided by the Department for Levelling Up, Housing & Communities. 

You can read the documentation [here](https://epc.opendatacommunities.org/docs/api) 

We have provided an api key for you to use in the .env.example file, please let us know if you have any issues

## Change log

`For the candidate to fill out`
