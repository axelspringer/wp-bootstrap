# WP Bootstrap

A simple pluggable framework for WordPress plugins.

## Getting Started

We provide an OOP for WordPress plugins. There are classes to construct settings pages, bootstrap code and general setup. They are found in the `AxelSpringer\WP\Bootstrap` namespace.

## Development

We use [Docker Compose](https://docs.docker.com/compose/) to provide a local development environment across projects. The WordPress listen at [localhost:8181](http://localhost:8181/wp-admin). The progress is saved in docker volumes.

```
# Run
docker-compose up
```

# License
[MIT](/LICENSE)