# README

This README would normally document whatever steps are necessary to get the
application up and running.

Things you may want to cover:

* Ruby version

* System dependencies

* Configuration

* Database creation

* Database initialization

* How to run the test suite

* Services (job queues, cache servers, search engines, etc.)

* Deployment instructions

* ...



![alt text](https://s3-ap-southeast-1.amazonaws.com/cfgc/public/assets/logo/favicon.ico "Logo") Community Family Guidance Council Website Documentation
======

The website can be found here: [https://cfgc.com/](https://cfgc.com/)





## This documents the `master` branch of this project

* [- Architecture / Setup / Configuation](https://github.com/fierropa/cfgc#setup)
* [- Gems](https://github.com/fierropa/cfgc#gems "Installed Gems")



## Setup

Architecture:

- Project Tracking: https://tree.taiga.io/project/setclockpm-cfgc/
- Hosting: **DigitalOcean**
- **Nginx** on **Ubuntu 16.04**
- Asset(s): **Amazon AWS / S3**
- Database: **PostgreSQL 9.4**
- Rails: 5.0

- Ruby: 2.4.0, managed using rbenv
- Package Managers: Rubygems, Bower
- Deployment: Capistrano 3.4


## Gems


    gem 'rails', '~> 5.0.1'
    gem 'pg'
    gem 'puma', '~> 3.0'
    gem 'sass-rails', '~> 5.0'
    gem 'uglifier', '>= 1.3.0'
    gem 'coffee-rails', '~> 4.2'


    gem 'jquery-rails'
    gem 'turbolinks', '~> 5'
    gem 'jbuilder', '~> 2.5'
    gem 'redis', '~> 3.0'
    gem 'capistrano-rails', group: :development


    group :development do
      gem 'web-console', '>= 3.3.0'
      gem 'listen', '~> 3.0.5'
      gem 'spring'
      gem 'spring-watcher-listen', '~> 2.0.0'
    end

    gem 'tzinfo-data', platforms: [:mingw, :mswin, :x64_mingw, :jruby]

    group :development, :test do
      gem 'byebug', platform: :mri
      gem 'factory_girl_rails'
      gem 'faker'
      gem 'pry-rails'
      gem 'pry-rescue'
      gem 'rspec-rails'
      gem 'rubocop'
      gem 'spring'
    end

    group :test do
      gem 'capybara'
      gem 'database_cleaner'
      gem 'launchy'
      gem 'selenium-webdriver'
    end
