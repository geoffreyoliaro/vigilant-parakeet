# Tasks

A tasker uses "Teams" to group people.  People may be members of teams, and
teams may also be members of teams.  Because teams can be used in most ways
that People can, Teams and People are both represented through the Person
class.

The Person class (available in `person.js`) has these attributes:

- `id` (a unique integer)
- `displayname` (a string)
- `isTeam` (a boolean)
- `members` (an array for teams, null for non-team persons)


## Task one

Write a function that accepts a person and a list of all
people/teams and returns a list of all the teams of which that
person is a member. You can import the "people" list from
`data1.js` to use as example data when writing your function.

This code (where your function is named `exercise1`)...

```
let teams = [];
let res = exercise1(data1.alice, data1.people);

res.forEach(function(item) {
    teams.push(item.displayName)
})

console.log(teams);

```


...should result in this being printed:

```
['The A-Team', 'The C-Team']
```