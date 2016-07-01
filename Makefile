#!/usr/bin/make -f
IMAGE := $(shell basename $(shell pwd))
VERSION := latest

.PHONY: all build rebuild

# ------------------------------------------------------------------------------

all: build

build:
	docker build -t=$(IMAGE):$(VERSION) .

rebuild:
	docker build -t=$(IMAGE):$(VERSION) --no-cache .
