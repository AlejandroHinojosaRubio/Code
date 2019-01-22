const express = require('express');
const app = express();
const morgan = require('morgan');
const bodyParser = require('body-parser');
const mongoose = require('mongoose')

const productsRoutes = require('./api/routes/products');
const orderRouter = require('./api/routes/orders');

mongoose.connect(
    'mongodb+srv://Alex:' + 
    process.env.MONGO_ATLAS_PW + 
    '@cluster0-la7td.mongodb.net/test?retryWrites=true', 
    {
    useMongoClient: true        
    }
);

app.use(morgan('dev'));
app.use(bodyParser.urlencoded({extended: false}));
app.use(bodyParser.json());

app.use((req, res, next) => {
    res.header("Access-Control-Allow-Origen", "*");
    res.header(
    'Acces-Control-Allow-Headers', 
    'Origin, X-Request-Width, Content-Type, Accept, Authorization'
    );
    if (req.method === 'OPTIONS') {
        res.header('Access-Control-Allow-Methods', 'PUT, POST, PATCH, DELETE, GET')
        return res.status(200).json({});
    }
    next();
});

app.use('/products', productsRoutes);
app.use('/orders', orderRouter);

app.use((req, res, next) => {
    const error = new Error('<h1>Not found</h1>');
    error.status = 404;
    next(error);
})

app.use((error, req, res, next) => {
    res.status(error.status || 500);
    res.json({
        error: {
            message: error.message
        }
    })
})

module.exports = app;