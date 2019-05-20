var express     = require("express");
var router = express.Router();

const PagesController = require('../controllers/pagesController')

router.get("/", PagesController.homePage);

module.exports = router;