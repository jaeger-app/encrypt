# Jaeger Encrypt Object

[![Build Status](https://travis-ci.org/jaeger-app/encrypt.svg?branch=master)](https://travis-ci.org/jaeger-app/encrypt)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jaeger-app/encrypt/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jaeger-app/encrypt/?branch=master)
[![Author](http://img.shields.io/badge/author-@mithra62-blue.svg?style=flat-square)](https://twitter.com/mithra62)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/jaeger-app/bootstrap/master/LICENSE) 

Provides a simple API to handle encrypting and decrypting strings.


## Installation
Add `jaeger-app/encrypt` as a requirement to your `composer.json`:

```bash
$ composer require jaeger-app/encrypt
```

## Basic Usage

```php
$encrypt = new Encrypt();
$encrypt->setKey($encryption_key);
$encoded = $encrypt->encode($string);
$decoded = $encrypt->encode($encoded);
```
