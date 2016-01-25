/**
 * @apiDefine HttpError
 * @apiHeader {String} authorization Authorization value.
 * @apiErrorExample {json} Error-Response (Unauthorize):
 *  {
 *    "message": "Unauthorized.",
 *    "code": 401
 *  }
 */

/**
 * @api {post} /user Signup
 * @apiVersion 1.0.0
 * @apiName Signup
 * @apiDescription Users initial login to MarbleLife app.
 * @apiGroup User
 * @apiParamExample {json} Request-Example (Email Address):
 *  {
 *    "type": "email",
 *    "email": String,
 *    "password": String,
 *    "first_name": String,
 *    "last_name": String,
 *    "birth_date": DateTime,
 *    "death_date": DateTime,
 *    (optional) "country": String,
 *    (optional) "state": String
 *  }
 * @apiParamExample {json} Request-Example (Facebook):
 *  {
 *    "type": "facebook",
 *    "access_token": String,
 *    "first_name": String,
 *    "last_name": String,
 *    "birth_date": DateTime,
 *    "death_date": DateTime,
 *    (optional) "country": String,
 *    (optional) "state": String
 *  }
 * @apiSuccessExample {json} Success-Response:
 *  HTTP/1.1 200 OK
 *  {
 *    "id": String,
 *    "first_name": String,
 *    "last_name": String,
 *    "birth_date": DateTime,
 *    "death_date": DateTime,
 *    "created_date": DateTime,
 *    "modified_date": DateTime
 *  }
 */
 
/**
 * @api {post} /session Login
 * @apiVersion 1.0.0
 * @apiName Login
 * @apiDescription Users login via Email or via Facebook. Returns App access token.
 * @apiGroup User
 * @apiParamExample {json} Request-Example (Email Address):
 *  {
 *    "type": "email",
 *    "email": String,
 *    "password": String
 *  }
 * @apiParamExample {json} Request-Example (Facebook):
 *  {
 *    "type": "facebook",
 *    "access_token": String
 *  }
 * @apiSuccessExample {json} Success-Response:
 *  HTTP/1.1 200 OK
 *  {
 *    "id": String,
 *    "week": DateTime,
 *    "marbletexture_id": String,
 *    "quote_id": String,
 *    "user_id": String
 *  }
 */
 
/**
 * @api {delete} /user Delete
 * @apiVersion 1.0.0
 * @apiName Delete
 * @apiDescription Deletes user defined by password or facebook token.
 * @apiGroup User
 * @apiParamExample {json} Request-Example (Email Address):
 *  {
 *    "type": "email",
 *    "email": String,
 *    "password": String
 *  }
 * @apiParamExample {json} Request-Example (Facebook):
 *  {
 *    "type": "facebook",
 *    "access_token": String
 *  }
 */
 
/**
 * @api {delete} /session Logout
 * @apiVersion 1.0.0
 * @apiName Logout
 * @apiDescription Deletes the session token and logs the user out.
 * @apiGroup User
 * @apiUse HttpError
 */
 
/**
 * @api {get} /user Get User Info
 * @apiVersion 1.0.0
 * @apiName Get User Info
 * @apiDescription Gets current user info.
 * @apiGroup User
 * @apiUse HttpError
 */
 
/**
 * @api {put} /user Verify User
 * @apiVersion 1.0.0
 * @apiName Verify User
 * @apiDescription Verifies user's email address and send the password reset link to the email provided.
 * @apiGroup User
 * @apiParamExample {json} Request-Example:
 *  {
 *    "email": String,
 *  }
 * @apiSuccessExample {json} Success-Response:
 *  HTTP/1.1 200 OK
 *  {
 *    "email": String,
 *    "message": String
 *  }
 */

/**
 * @api {patch} /user Update User
 * @apiVersion 1.0.0
 * @apiName Update User
 * @apiDescription Modifies user info.
 * @apiGroup User
 * @apiParamExample {json} Request-Example:
 *  {
 *    (optional) "first_name": String,
 *    (optional) "last_name": String,
 *    (optional) "birth_date": DateTime,
 *    (optional) "death_date": DateTime,
 *    (optional) "country": String,
 *    (optional) "state": String
 *  }
 * @apiUse HttpError
 */
 
/**
 * @api {get} /marble List
 * @apiVersion 1.0.0
 * @apiName List
 * @apiDescription Gets list of marbles.
 * @apiGroup Marble
 * @apiSuccessExample {json} Success-Response:
 *  HTTP/1.1 200 OK
 *  [
 *    {
 *      "id": String,
 *      "week": DateTime,
 *      "marbletexture_id": String,
 *      "quote_id": String,
 *      "user_id": String,
 *      "created_date": DateTime,
 *      "modified_date": DateTime,
 *    },
 *    ...
 *  ]
 * @apiUse HttpError
 */
 
/**
 * @api {post} /marble Add
 * @apiVersion 1.0.0
 * @apiName Add
 * @apiDescription Adds new marble.
 * @apiGroup Marble
 * @apiParamExample {json} Request-Example:
 *  {
 *    "week": DateTime,
 *    "quote_id": Int,
 *    "lifeaction_id": Int
 *    (optional) "goal": [ @see POST /marble/{id}/goal/ format ],
 *    (optional) "journal": [ @see POST /marble/{id}/journal format ],
 *    "created_date": DateTime,
 *    "modified_date": DateTime,
 *  }
 * @apiUse HttpError
 */

/**
 * @api {patch} /marble/{id} Update
 * @apiVersion 1.0.0
 * @apiName Update
 * @apiDescription Modifies specific marble.
 * @apiGroup Marble
 * @apiParamExample {json} Request-Example:
 *  {
 *    "week": DateTime,
 *    "quote_id": Int,
 *    "lifeaction_id": Int
 *    "created_date": DateTime,
 *    "modified_date": DateTime,
 *  }
 * @apiUse HttpError
 */

/**
 * @api {delete} /marble/{id} Delete
 * @apiVersion 1.0.0
 * @apiName Delete
 * @apiDescription Deletes specific marble. (Is this possible?)
 * @apiGroup Marble
 * @apiUse HttpError
 */

/**
 * @api {get} /marble/{id}/goal List Goals
 * @apiVersion 1.0.0
 * @apiName List Goals
 * @apiDescription Lists marble goals.
 * @apiGroup Goal
 * @apiSuccessExample {json} Success-Response:
 *  HTTP/1.1 200 OK
 *  [
 *    {
 *      "id": String,
 *      "count": String,
 *      "max_count": String,
 *      "source": String,
 *      "text": String,
 *      "created_date": DateTime,
 *      "modified_date": DateTime,
 *      "marble_id": String
 *      "completed_date": null|DateTime,
 *    },
 *    ...
 *  ]
 * @apiUse HttpError
 */
 
/**
 * @api {get} /marble/{id}/goal/{goalId}/photo Fetch Photos
 * @apiVersion 1.0.0
 * @apiName Fetch Photos
 * @apiDescription Fetches marble goal photos.
 * @apiGroup Goal
 * @apiUse HttpError
 */
 
/**
 * @api {post} /marble/{id}/goal/{goalId}/photo Add Photo
 * @apiVersion 1.0.0
 * @apiName Add Photo
 * @apiDescription Adds new photo to marble goal.
 * @apiGroup Goal
 * @apiParamExample {json} Request-Example:
 *  {
 *    "key": String
 *  }
 * @apiUse HttpError
 */

/**
 * @api {post} /marble/{id}/goal Add Goal
 * @apiVersion 1.0.0
 * @apiName Add Goal
 * @apiDescription Adds new marble goal.
 * @apiGroup Goal
 * @apiParamExample {json} Request-Example:
 *  {
 *    "count": Int,
 *    "max_count": Int,
 *    "text": String,
 *    "completed_date": null|DateTime,
 *    "created_date": DateTime,
 *    "modified_date": DateTime
 *  }
 * @apiSuccessExample {json} Success-Response:
 *  HTTP/1.1 200 OK
 *  {
 *    "id": String,
 *    "count": String,
 *    "max_count": String,
 *    "text": String,
 *    "created_date": DateTime,
 *    "modified_date": DateTime,
 *    "marble_id": String,
 *    "completed_date": null|DateTime,
 *  }
 * @apiUse HttpError
 */
 
/**
 * @api {get} /goal/{id} Get Goal Info
 * @apiVersion 1.0.0
 * @apiName Get Goal Info
 * @apiDescription Gets specific goal info.
 * @apiGroup Goal
 * @apiSuccessExample {json} Success-Response:
 *  HTTP/1.1 200 OK
 *  {
 *    "id": String,
 *    "count": String,
 *    "max_count": String,
 *    "text": String,
 *    "created_date": DateTime,
 *    "modified_date": DateTime,
 *    "marble_id": String
 *  }
 * @apiUse HttpError
 */
 
/**
 * @api {patch} /goal/{id} Update Goal
 * @apiVersion 1.0.0
 * @apiName Update Goal
 * @apiDescription Modifies specific goal.
 * @apiGroup Goal
 * @apiParamExample {json} Request-Example:
 *  {
 *    (optional) "count": Int,
 *    (optional) "max_count": Int,
 *    (optional) "text": String,
 *    (optional) "completed_date": DateTime,
 *    (optional) "created_date": DateTime,
 *    (optional) "modified_date": DateTime
 *  }
 * @apiUse HttpError
 */
 
/**
 * @api {delete} /goal/{id} Delete Goal
 * @apiVersion 1.0.0
 * @apiName Delete Goal
 * @apiDescription Deletes specific goal from marble.
 * @apiGroup Goal
 * @apiUse HttpError
 */
 
/**
 * @api {get} /lifeaction List
 * @apiVersion 1.0.0
 * @apiName List
 * @apiDescription Gets all life actions.
 * @apiGroup Life Action
 * @apiSuccessExample {json} Success-Response:
 *  HTTP/1.1 200 OK
 *  [
 *    {
 *      "id": String,
 *      "message": String,
 *      "modified_date": Datetime,
 *      "created_date": Datetime,
 *    },
 *    ...
 *  ]
 * @apiUse HttpError
 */
 
/**
 * @api {get} /lifeaction/{id} Get
 * @apiVersion 1.0.0
 * @apiName Get
 * @apiDescription Gets specific life action.
 * @apiGroup Life Action
 * @apiSuccessExample {json} Success-Response:
 *  HTTP/1.1 200 OK
 *  {
 *    "id": String,
 *    "message": String,
 *    "modified_date": Datetime,
 *    "created_date": Datetime,
 *  }
 * @apiUse HttpError
 */
 
/**
 * @api {delete} /lifeaction/{id} Delete
 * @apiVersion 1.0.0
 * @apiName Delete
 * @apiDescription Deletes specific life action.
 * @apiGroup Life Action
 * @apiUse HttpError
 */

/**
 * @api {get} /marble/{id}/journal List
 * @apiVersion 1.0.0
 * @apiName List
 * @apiDescription Gets all marble journals.
 * @apiGroup Journal
 * @apiSuccessExample {json} Success-Response:
 *  HTTP/1.1 200 OK
 *  [
 *    {
 *      "id": String,
 *      "title": String,
 *      "text": String,
 *      "created_date": DateTime,
 *      "modified_date": DateTime,
 *      "marble_id": String
 *    }
 *  ]
 * @apiUse HttpError
 */
 
/**
 * @api {post} /marble/{id}/journal Update
 * @apiVersion 1.0.0
 * @apiName Update
 * @apiDescription Updates specific journal
 * @apiGroup Journal
 * @apiParamExample {json} Request-Example:
 *  {
 *    "title": String,
 *    "text": String,
 *    "created_date": DateTime,
 *    "modified_date": DateTime
 *  }
 * @apiSuccessExample {json} Success-Response:
 *  HTTP/1.1 200 OK
 *  {
 *    "id": String,
 *    "title": String,
 *    "text": String,
 *    "created_date": DateTime,
 *    "modified_date": DateTime,
 *    "marble_id": String
 *  }
 * @apiUse HttpError
 */
 
/**
 * @api {get} /journal/{id} Get
 * @apiVersion 1.0.0
 * @apiName Get
 * @apiDescription Gets a specific journal.
 * @apiGroup Journal
 * @apiSuccessExample {json} Success-Response:
 *  HTTP/1.1 200 OK
 *  {
 *    "id": String,
 *    "title": String,
 *    "text": String,
 *    "created_date": DateTime,
 *    "modified_date": DateTime,
 *    "marble_id": String
 *  }
 * @apiUse HttpError
 */

/**
 * @api {patch} /journal/{id} Update
 * @apiVersion 1.0.0
 * @apiName Update
 * @apiDescription Modifies a specific journal
 * @apiGroup Journal
 * @apiParamExample {json} Request-Example:
 *  {
 *    (optional) "title": String,
 *    (optional) "text": String,
 *    (optional) "created_date": DateTime,
 *    (optional) "modified_date": DateTime
 *  }
 * @apiUse HttpError
 */

/**
 * @api {delete} /journal/{id} Delete
 * @apiVersion 1.0.0
 * @apiName Delete
 * @apiDescription Deletes a specific journal
 * @apiGroup Journal
 * @apiUse HttpError
 */

// NEXT ROW #31
 
/**
 * @api
 * @apiVersion 1.0.0
 * @apiName
 * @apiDescription
 * @apiGroup
 * @apiParamExample
 * @apiSuccessExample
 * @apiUse HttpError
 */
 
 
 
 
 
 
 
 
 
 