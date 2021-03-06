<p align="center"><img src="https://point-red.github.io/point/_media/logo.svg"></p>

<p align="center">
<a href="https://travis-ci.org/point-red/point"><img src="https://travis-ci.org/point-red/point.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/point-red/point"><img src="https://poser.pugx.org/point-red/point/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/point-red/point"><img src="https://poser.pugx.org/point-red/point/v/unstable.svg" alt="Unstable Version"></a>
<a href='https://coveralls.io/github/point-red/point?branch=master'><img src='https://coveralls.io/repos/github/point-red/point/badge.svg?branch=master' alt='Coverage Status' /></a>
<a class="badge-align" href="https://www.codacy.com/app/martiendt/point?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=point-red/point&amp;utm_campaign=Badge_Grade"><img src="https://api.codacy.com/project/badge/Grade/0beb7ac9c0f04d7484b7159e45ae3414"/></a>
<a href="https://styleci.io/repos/108611909"><img src="https://styleci.io/repos/108611909/shield?branch=master" alt="StyleCI"></a>
<a href="https://circleci.com/gh/point-red/point/tree/master"><img src="https://circleci.com/gh/martiendt/tutorial.svg?style=svg" alt="Build Status"></a>
</p>

> This package still in active development and not ready for production yet.

## About Point

Our mission is to provide exceptional accounting and bookeeping solutions in the most demanding era. 

## Quick Start

First you need to install [Composer](https://getcomposer.org/doc/00-intro.md) and [Git](https://git-scm.com/).

After that you can create new point project using composer.

`composer create-project point-red/point point`

Go to your project directory and install dependencies.

```bash
cd point
composer install
```

You are ready to go, please refer to our documentation below for any guide and instruction.

## Documentation

Point developer documentation can be found at [https://point-red.github.io/point](https://point-red.github.io/point/), if you have feedback or would like to write some user documentation, please let us know by emailing support.

## Security Vulnerabilities

If you discover a security vulnerability within Point, please send an e-mail to martien@point.red. All security vulnerabilities will be promptly addressed.

## Roadmap

> v0.1.x we will focus to setup very minimal project and integration

- [x] ~~Add starter API project~~
- [x] ~~Add starter docs template~~
- [x] ~~Add API documentation template~~
- [x] ~~Add unit testing sample~~
- [x] ~~Add Travis CI~~
- [x] ~~Add contributing guide~~ 
- [x] ~~Integrate code coverage, review, analytic~~ 
- [x] ~~Integrate code style~~

> v0.2.x start to design module and database for minimum viable product
- [x] ~~Master Person (can be supplier, customer, employee, manager, supervisor, etc)~~
- [ ] Master Item (stockable)
- [ ] Master Service (non stockable)
- [ ] Master Fixed Assets (can have depreciation)
- [ ] Master Account (chart of account)
- [x] ~~Master Warehouse (multi warehouse per company)~~
- [ ] Master Allocation (allocated payment)

### Modules :
- [ ] Inventory
    - [ ] Purchasing
    - [ ] Sales
    - [ ] Inventory Usage
    - [ ] Stock Opname
    - [ ] Stock Correction
    - [ ] Transfer Item between Warehouse
- [ ] Fixed Assets
    - [ ] Purchasing
    - [ ] Sales
    - [ ] Depreciation
- [ ] Point of Sales
- [ ] Manufacture
- [ ] Finance
    - [ ] Cash
    - [ ] Bank
    - [ ] Cheque
    - [ ] Payment Order
    - [ ] Cash Advance
- [ ] Accounting
    - [ ] Memo Journal
     
> v0.3.x in depth testing and performance check
- [ ] Prepare for release minimum viable api
