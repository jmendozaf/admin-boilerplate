#!/bin/bash

TABLE_NAME="$1"

php artisan krlove:generate:model $TABLE_NAME
