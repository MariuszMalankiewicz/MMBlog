#MMBlog

Blogging software

Managment system (CRUD)
 -User
 -Post
 -Comment

Contains:

 - validation system checking the correctness of data differences
    1. Request for cleaning controllers
    2. Session with status message

 - relation between the user and posts and comments
    1. User->hasMany(Posts)->hasMany(Comments) 

 - authorization and information security functions
    1. Midleware

 - 4 access steps:
    1. no account -> only read post && comments
    2. user -> read posts && (comments (CRUD))
    3. admin -> read posts && (comments,post (CRUD))
    4. superAdmin -> read posts && (comments,post,user (CRUD))


WEBSITE: ---