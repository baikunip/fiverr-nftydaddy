// utils/NotionApi.js

require('dotenv').config();
const axios = require('axios');

async function NotionApi(id) {
  return await axios
    .get(`https://www.notion.so/nftydaddy/383f94eb39754b3bbd9130c8ad94cdc9?v=46e8bb0bc2f248b6b01cf994ab0cdb6b&pvs=4`, {
      headers: {
        Authorization: `Bearer ${process.env.NOTION_SECRET}`,
        'Notion-Version': ' 2022-02-22',
      },
    })
    .then(async (res) => {
      return res.data;
    })
    .catch((err) => {
      NotionApi = undefined;
      console.log(err);
    });
}

module.exports = NotionApi;