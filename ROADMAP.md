# Laravel Developer Roadmap — OGO Sense

**Target:** PHP/Laravel Developer, OGO Sense (Banja Luka)
**Stack:** Laravel 13 · PHP 8.3+ · Pest · Sanctum
**Pace:** 2 hours/day → ~16 weeks ideal, ~5 months realistic
**Total:** 230 focused hours

---

## How to use this

- Check a box every time you finish a micro-task. Each `[ ]` → `[x]` is a win. Collect them.
- One session = one small thing. If a task feels big, it's too big — tell me and we split it.
- Every session opens with a 60-second warm-up rep. Motion first, motivation follows.
- You build before you understand. Type it, run it, watch it break. That's the lesson.
- Miss a day? Fine. Just don't miss two. Pick up the next box.
- The whole way through, one project spine grows. You'll *see* the app getting bigger.

**Progress:** 1 / 9 phases complete

---

## P0 · Setup & Git — 8h · done by week 1

*Build: "hello world" running locally, pushed to GitHub.*

- [x] Confirm PHP 8.3+ is installed (`php --version`)
- [x] Install Composer (`composer --version`)
- [x] Install Laravel Herd (local dev environment)
- [x] Set up VS Code + PHP extensions
- [x] Run your first PHP file locally
- [x] Learn the 4 git moves: `add`, `commit`, `push`, `pull`
- [x] Create your first GitHub repo and push to it

**Phase done when:** a file runs locally AND lives on GitHub.

---

## P1 · PHP language — 32h · done by week 3

*Build: a small CLI tool, pure PHP.*

- [x] Variables, types, strings, numbers
- [x] Arrays (indexed + associative) and array functions
- [x] Conditionals and loops
- [x] Functions, arguments, return types
- [x] Classes and objects
- [x] Properties, methods, visibility (public/private/protected)
- [x] Constructors and `$this`
- [x] Interfaces and abstract classes
- [x] Traits
- [x] Namespaces + Composer autoloading
- [x] Error handling (try/catch, exceptions)
- [x] **Mini-project:** build + commit a small CLI tool

**Phase done when:** your CLI tool works and you can explain every line.

---

## P2 · MySQL & databases — 18h · done by week 4

*Build: design + query a real schema by hand.*

- [ ] Tables, columns, data types
- [ ] Primary keys and foreign keys
- [ ] INSERT / SELECT / UPDATE / DELETE
- [ ] WHERE, ORDER BY, LIMIT
- [ ] JOINs (inner + left)
- [ ] One-to-many and many-to-many relationships
- [ ] Indexes (what they are, when to add them)
- [ ] Normalization basics (why we split tables)
- [ ] **Mini-project:** design a 3-table schema and write queries against it

**Phase done when:** you can model a small domain and query it without help.

---

## P3 · Laravel core — 26h · done by week 6

*Build: your first Laravel routes returning JSON.*

- [ ] Create a fresh Laravel 13 project
- [ ] Understand the folder structure
- [ ] Routing (GET/POST/PUT/DELETE)
- [ ] Controllers
- [ ] Request → response lifecycle
- [ ] Returning JSON responses
- [ ] The service container + dependency injection
- [ ] Config and `.env`
- [ ] Artisan commands (the basics)
- [ ] **Mini-project:** a few routes returning real JSON

**Phase done when:** you can add a new endpoint and explain how the request reaches it.

---

## P4 · Eloquent & relationships — 30h · done by week 8

*Build: a data model with related tables.*

- [ ] Migrations (create/modify tables in code)
- [ ] Models
- [ ] Eloquent CRUD (create, read, update, delete)
- [ ] Seeders and factories (fake data)
- [ ] `hasMany` / `belongsTo`
- [ ] `belongsToMany` (many-to-many)
- [ ] Eager loading (`with()`) + the N+1 problem
- [ ] Query scopes
- [ ] **Mini-project:** wire up 2–3 related models with seeded data

**Phase done when:** you can query related data cleanly through Eloquent.

---

## P5 · REST APIs + validation + Postman — 26h · done by week 10

*Build: a working CRUD API.*

- [ ] REST principles (resources, verbs, status codes)
- [ ] API resource controllers
- [ ] API Resources (response shaping)
- [ ] Form Requests + validation rules
- [ ] Handling validation errors as JSON
- [ ] Pagination
- [ ] Build a Postman collection for every endpoint
- [ ] Save Postman requests with example responses
- [ ] **Mini-project:** a full CRUD API + its Postman collection

**Phase done when:** every endpoint works and is documented in Postman.

---

## P6 · Auth & middleware — 18h · done by week 11

*Build: lock your API behind login.*

- [ ] Sanctum setup for API tokens
- [ ] Register / login endpoints
- [ ] Protecting routes with auth middleware
- [ ] Authorization: gates and policies
- [ ] Custom middleware
- [ ] **Mini-project:** add token auth + a policy to your API

**Phase done when:** unauthenticated requests are rejected and permissions are enforced.

---

## P7 · Testing with Pest + PHPUnit — 28h · done by week 13

*Build: a green test suite over your API — your differentiator.*

- [ ] Why we test + the testing pyramid
- [ ] Pest setup
- [ ] Your first unit test
- [ ] Assertions
- [ ] Feature/integration tests (hitting real endpoints)
- [ ] Database testing (`RefreshDatabase`)
- [ ] Testing auth-protected routes
- [ ] Testing validation failures
- [ ] Using factories inside tests
- [ ] Get to a fully green suite
- [ ] **Mini-project:** cover your API with unit + integration tests

**Phase done when:** `php artisan test` runs green and covers the main paths.

---

## P8 · Capstone project — 44h · done by week 16

*Build: the thing you show OGO Sense.*

- [ ] Pick a real, small domain (we'll choose together)
- [ ] Design the schema
- [ ] Build migrations + models + relationships
- [ ] Build the full REST API
- [ ] Add validation everywhere
- [ ] Add Sanctum auth + policies
- [ ] Write the full test suite (unit + integration)
- [ ] Build the complete Postman collection
- [ ] Touch of microservices: add a queue + an event
- [ ] Write a real README (setup, endpoints, how to run tests)
- [ ] Clean commit history, pushed to GitHub
- [ ] Final review pass together before it goes on your CV

**Phase done when:** it's on GitHub, tested, documented, and you'd defend every line in an interview.

---

## After P8

You now have exactly what the JD asks for: Laravel, MySQL, API + Postman, integration + unit tests, and a real project on GitHub. Next step is application materials — but that's a separate sprint, and we'll do it when the project is real.
