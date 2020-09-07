function Person(id, displayName, members) {
	this.id = id;
	this.displayName = displayName;
	this.members = members;
	this.isTeam = Boolean(Array.isArray(members) && members.length);
}

module.exports = Person;