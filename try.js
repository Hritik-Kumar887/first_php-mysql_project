// function sortLibrary() {
//     // var library is defined, use it in your code
//     // use console.log(library) to output the sorted library data
    
//     for(let i=0 ; i < library.length-1 ; i++){
//         if(library[i].title[0] < library[i+1].title[0]){
//             [library[i],library[i+1]] = [library[i+1],library[i]];
//             i=0;
//         }
//     }
//     console.log(library);
//     // console.log(library[0].title[0]);
// }

// tail starts here
var library = [
    {
        author: 'Bill Gates',
        title: 'The Road Ahead',
        libraryID: 1254
    },
    {
        author: 'Steve Jobs',
        title: 'Walter Isaacson',
        libraryID: 4264
    },
    {
        author: 'Suzanne Collins',
        title: 'Mockingjay: The Final Book of The Hunger Games',
        libraryID: 3245
    }
];


// sortLibrary();

let sortedArray = library.sort((a, b) => {
    if (a.title > b.title)
      return 1;
    else if (a.title < b.title)
      return -1
    else
      return 0;
  })
  console.log(sortedArray);


  console.log([11, 2, 3, 6, 8].sort((a, b) =>{
 console.log(a,b,a-b) 
  return a-b; }
  ));

  // in js
  /*
  var Emoji = (function(){
    function Emoji(value){
      this.value = value;
    }
    return Emoji;
  }())
  */

  
  // in ts
  /*
  class Emoji{
    constructor(public item){

    }
  }
  */