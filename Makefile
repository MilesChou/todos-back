#!/usr/bin/make -f
IMAGE := $(shell basename $(shell pwd))
VERSION := latest

.PHONY: all build rebuild test

# ------------------------------------------------------------------------------

all: build

build:
	docker build -t=$(IMAGE):$(VERSION) .

test:
	@docker-compose run --rm tester php vendor/bin/codecept run

rebuild:
	docker build -t=$(IMAGE):$(VERSION) --no-cache .
