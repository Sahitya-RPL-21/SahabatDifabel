let print = (params)=>{
    console.log(params);
}

let laporanArray = []; // digunakan untuk menyimpan data laporan

class Laporan{
    date;
    description;
    type;
    author;
    responder;
    isEdited;
    upVotes=0;
    downVotes=0;
    changeDescription(desc){
        let isDescExist = this.description !== undefined;
        print("desc does"+ (isDescExist && " exist" || "n't exist") );
        this.description = desc;
        print("has it ever been editted? "+ (this.isEdited && " yes" || " no") + this.isEdited);
        if (isDescExist) {
            this.isEdited = true;
            print("this has been updated");
        };
    };
}

let createLaporan = (table) => {
    let o = new Laporan();

    //pengaturan nilai property dari param table
    for (let i in table) {
        o[i] = table[i];
    }
    //input instance dari class laporan ke dalam table/array laporanArray
    let index = laporanArray.push(o);
    print("added a new Laporan to the array, Laporan " + index);

    return o;
}

//testing pembuatan 10 laporan
for (let i = 1; i<=10; i++){
    createLaporan({
        author: 'john doe',
    })
}