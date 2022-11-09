let print = (params)=>{
    console.log(params);
}

let userArray = []; // digunakan untuk menyimpan data user

class User {
    username;
    password;
    isLogged;
    register(un,pw){
        this.username = un;
        this.password = pw;
        print("Register successful, username: " + this.username + ", password: " + this.password);
    }
    login(un,pw){
        let isUN = this.username !== null && this.username == un, isPW = this.password !== null && this.password == pw; //belum ada type checking
        if (isUN && isPW) {
            this.logged = true;
            print("Login succeed, Welcome " + this.username);
        }else{
            print("Login attempt failed, username and password doesn't match ");
        }
    }
}

class Pengguna extends User {
    nama; 
}

class Admin extends User {
    isAdmin;
    deleteUser(user){
        if (user instanceof User) { //memastikan bahwa variable reference user adalah instance dari class User
            print("It's a user!");
            for (let v in user) {
                delete user[v];
            }
        }
    }
}

let createUser = (table) => {
    let user = new User();
    for (let i in table) {
        user[i] = table[i];
    }
    let index = userArray.push(user); //push akan mereturn index/posisi dari data yang baru saja dimasukkan
    print("added a new User to the array, User " + user.username);

    return user;
}

//testing pembuatan 10 user
for (let i = 1; i<=10; i++){
    createUser({
        username: 'john doe'+i,
        password: '123'+i,
    })
}

//testing login 10 user
for (let i in userArray){
    let v = userArray[i];
    v.login(v.username,v.password);
}


/*
const test = new User(), admin = new Admin();
test.login("s","d")
admin.register("admin","123");
admin.login("admin","123");
admin.deleteUser(test);
print(test);
*/
