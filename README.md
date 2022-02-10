
# Hammock Tech Test

This technical test is a simple application that allows the user to find an energy performance certificate (EPC) for a given property. 


##How to set up the application

The application is built using [Laravel 9](https://laravel.com/docs/9.x), [Livewire](https://laravel-livewire.com/) and [Bootstrap](https://getbootstrap.com/docs/4.0/getting-started/introduction/).

It is the same stack we use at Hammock so should be as close to a real-world scenario as possible.

The app was built using [Laravel Sail](https://laravel.com/docs/8.x/sail). This is to make it as easy as possible to get up and running with the tech test.

To run the application using sail you will need to have [Docker Desktop](https://www.docker.com/products/docker-desktop) installed. 

If you are on a mac and have installed docker it should be as simple as cloning the repo, and executing `./vendor/bin/sail up`

There are instructions in the Sail documentation on how to set it up using different operating systems. We want to assess your skills as a developer, not how well you can set up a development environment so if you can't use Docker or are having issues with sail please let us know and we would be happy to point you towards an alternative solution.

##What we would like you to do

The purpose of the site is to make it easy for someone to look up the EPC for their property and get the recommendations associated with it.

In basic terms we would like you to enhance the functionality of the application and improve the code quality of the underlying service.

There are a number of different ways you could do this, the following list is intended to give you a choice of what you would like to build. 

**We do not expect or want you to do all of these**. 

Aim to spend about an hour and please do not spend more than 2 hours on the task.

- Add the ability to search using the first line of the address as well as the postcode
- Fetch the recommendations for a specific EPC certificate.
- Give the user a list of all EPC's for a property and allow them to select a specific one to look at
- Represent the EPC data in an easier to read format than it is currently
- Test the service and the Livewire components
- Save the EPC data to a database

Please document your changes and the reasons you made them in the readme below

##About the API
The Open Data Communities EPC api provides open access to the official EPC register. 

It is free to use and is the official record of EPC's provided by the Department for Levelling Up, Housing & Communities. 

You can get an api key [here](https://epc.opendatacommunities.org/#register) and read the documentation [here](https://epc.opendatacommunities.org/docs/api) 

To get the API to work you will need to add the key and email address used to obtain the key in your environment file 

>`OPEN_DATA_COMMUNITIES_EMAIL=`
>
>`OPEN_DATA_COMMUNITIES_KEY=`

## Change log

`For the candidate to fill out`
