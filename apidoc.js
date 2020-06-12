/**
 * @api {get} /mascot Makes the Mascot appear
 * @apiGroup Mascot
 * @apiSuccess {String} mascot Mascot Life Experience.
 * @apiSuccessExample {json} Success-Response:
 *    HTTP/1.1 200 OK
 *    [{
 *      "success": "Mascot is alive"
 *    }]
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 404 Not Found
 *     {
 *       "error": "Mascot is dead"
 *     }
 */


/**
 * @api {get} /homeVisit Type of User visiting the Homepage
 * @apiGroup User
 * @apiSuccess {Object} profile User profile information.
 * @apiSuccessExample {json} Success-Response:
 *    HTTP/1.1 200 OK
 *    [{
 *      "success": "User identified"
 *    }]
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 404 Not Found
 *     {
 *       "error": "User is not identified"
 *     }
 */

/**
 * @api {get} /classes/all List all the classes
 * @apiGroup Classes
 * @apiSuccess {Object[]} classes Classes' list.
 * @apiSuccess {Number} classes.id Class id
 * @apiSuccess {String} classes.name Class name
 * @apiSuccess {String} classes.teacher Teacher of this class
 * @apiSuccess {String} classes.students Students of the class
 * @apiSuccess {String} classes.activities Activities of the class
 * @apiSuccessExample {json} Success
 *    HTTP/1.1 200 OK
 *    [{
 *      "id": 1,
 *      "name": "CM1",
 *      "teacher": "Emmanuel Kant"
 *      "students": "Britney Spears",
 *      "activities": "Maths"
 *    }]
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 404 Not Found
 *     {
 *       "error": "Class is not registered"
 *     }
 */

 /**
 * @api {get} /class/{id}/students List all the students of one class
 * @apiParam {Number} id Class unique ID.
 * @apiGroup Classes
 * @apiSuccess {Object[]} classes Classes' list.
 * @apiSuccess {Number} classes.id Class id
 * @apiSuccess {String} classes.name Class name
 * @apiSuccess {String} classes.teacher Teacher of this class
 * @apiSuccess {String} classes.students Students of the class
 * @apiSuccess {String} classes.activities Activities of the class
 * @apiSuccessExample {json} Success
 *    HTTP/1.1 200 OK
 *    [{
 *      "id": 1,
 *      "name": "CP",
 *      "teacher": "Arthur Schoppenhauer"
 *      "students": "Sailor Moon",
 *      "activities": "History"
 *    }]
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 404 Not Found
 *     {
 *       "error": "Students are not registered"
 *     }
 */