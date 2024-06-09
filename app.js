var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
const { Client } = require("@notionhq/client")
const axios = require('axios')

var indexRouter = require('./routes/index');
var usersRouter = require('./routes/users');

var app = express();
var notion = new Client({ auth: process.env.NOTION_KEY })
app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));
// request
app.get('/get-data',async (req,res) => {
    // const databaseId = '383f94eb39754b3bbd9130c8ad94cdc9';
    // const response = await notion.databases.retrieve({ database_id: databaseId });
    // console.log(response);
    try {
        const response = await axios.get("https://www.notion.so/nftydaddy/383f94eb39754b3bbd9130c8ad94cdc9?v=46e8bb0bc2f248b6b01cf994ab0cdb6b&pvs=4",
            {
                headers: {
                    Authorization: `Bearer vwAgGyHilU5tKExktYcYEj0ZRtyuC2sCoTClIxAcaPR`,
                    "Notion-Version": "2022-06-28",
                    "Content-Type": "application/json",
                },
                // body: JSON.stringify({grant_type: '"authorization_code"'})
            }
        )
        res.json(response.data)
    }
    // catch (err) {
    //     console.log(err)
    // }
    // fetch('https://www.notion.so/nftydaddy/383f94eb39754b3bbd9130c8ad94cdc9?v=46e8bb0bc2f248b6b01cf994ab0cdb6b&pvs=4',
    //     {
    //         method: 'GET',
    //         headers: {
    //             Authorization: `Bearer secret_vwAgGyHilU5tKExktYcYEj0ZRtyuC2sCoTClIxAcaPR`,
    //             "Notion-Version": "2022-06-28",
    //             "Content-Type": "application/json",
    //         },
    //         // body: JSON.stringify({grant_type: '"authorization_code"'})
    //     }
    //     ).then((resp)=>{
    //         console.log(resp)
    //     })
})

// route
app.use('/', indexRouter);
app.use('/users', usersRouter);

module.exports = app;
