#!/usr/bin/make -f
IMAGE := $(shell basename $(shell pwd))
VERSION := latest

.PHONY: all build rebuild test

# ------------------------------------------------------------------------------

all: build

build:
	@docker build -t=$(IMAGE):$(VERSION) --file=Dockerfile --force-rm .
	@docker build -t=$(IMAGE):dev --file=Dockerfile.dev --force-rm .

start:
	@docker-compose build
	@docker-compose up -d

stop:
	@docker-compose stop

test: start
	@docker-compose run --rm tester php vendor/bin/codecept run
