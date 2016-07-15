#!/usr/bin/make -f
IMAGE := $(shell basename $(shell pwd))
VERSION := latest

.PHONY: all build rebuild test

# ------------------------------------------------------------------------------

all: build

build:
	docker build -t=$(IMAGE):$(VERSION) .

start:
	@docker-compose up -d

stop:
	@docker-compose stop

test: start
	@docker-compose run --rm tester php vendor/bin/codecept run

rebuild:
	docker build -t=$(IMAGE):$(VERSION) --no-cache .
