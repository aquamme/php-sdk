# syntax=docker/dockerfile:labs
FROM caddy AS base
COPY images/Caddyfile /etc/caddy/Caddyfile
COPY . /tests
