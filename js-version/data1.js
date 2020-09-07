const Person = require('./person.js');

let alice = new Person(0, 'Alice');
let bob = new Person(1, 'Bob');
let carlos = new Person(2, 'Carlos');
let carol = new Person(3, 'Carol');
let charlie = new Person(4, 'Charlie');
let chuck = new Person(5, 'Chuck');
let dave = new Person(6, 'Dave');
let eve = new Person(7, 'Eve');
let mallory = new Person(8, 'Mallory');
let peggy = new Person(9, 'Peggy');
let trent = new Person(10, 'Trent');
let victor = new Person(11, 'Victor');
let walter = new Person(12, 'Walter');

let aTeam = new Person(90, 'The A-Team', [alice, bob, carlos]);
let bTeam = new Person(91, 'The B-Team', [peggy, trent, victor, bob]);
let cTeam = new Person(92, 'The C-Team', [charlie, eve, alice, bob]);

let people = [alice, bob, carlos, carol, charlie, chuck, dave, eve, mallory, peggy, trent, victor, walter, aTeam, bTeam, cTeam];