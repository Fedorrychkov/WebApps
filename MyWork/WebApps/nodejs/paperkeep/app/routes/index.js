const noteRotes = require('./note_routes');

module.exports = function(app, db) {
  noteRotes(app, db);
};
