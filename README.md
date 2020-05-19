# Simple API in PHP using Docker
Simple API in PHP using no framework.
You could GET information, sort it and filter it regarding the different categories: title, tags, id.

**Tech: PHP, Docker-compose**

> To launch: _docker-compose up -d_

> For backend: go to _http://127.0.0.1:8000/_ and add endpoints

> To end: _docker-compose down_ 
________________
## Documentation

### Endpoints

**get.php**
- GET: return all the data

**get.php?sort=$keyword**
- GET: return the data sorted regarding the _$keyword_
- Keywords accepted: title, tags, id

**get_by_tags.php?tags=$keyword**
- GET: return the data filtered regarding the _$keyword_
- Keywords accepted: marketing-automation, ad-network, analytics ...

____________
## Questions
- What is a good API documentation ? 

A good API documentation is going straight to the point and is clear about the endpoints. It means define the mandatory and optional information. A quick description about the goal of the endpoint is also appreciate. It should also be gathered regarding the subject (the user, the product, the app, the token ...).

- How to change an API for registered users only ?

In my opinion, use token as JSON Web Token is the best option. It will allow to have a simple evolution of our service with a secure way to exchange data. It will also allow good performance and it is stateless.

- Dockererize the service:

> To launch: _docker-compose up -d_

> For backend: go to _http://127.0.0.1:8000/_ and add endpoints

> To end: _docker-compose down_ 