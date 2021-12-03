const axios = require('axios');

async function getdatas(url) {
    var data = await axios.get(url);
    return data.data;
}
module.exports = { getdatas };