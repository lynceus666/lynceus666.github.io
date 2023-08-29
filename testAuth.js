const bcrypt = require('bcrypt');
const saltRounds = 10;

const myPlaintextPassword = 'meinPasswort';

const hash = bcrypt.hashSync(myPlaintextPassword, saltRounds);
console.log(hash);