let n = 15;
//BUBBLE SORT ALGORITHM
// console.log(parseInt(n.toString().split('').sort((a, b) => b-a).join('')));
// console.log(typeof n);
let arr = n;
arr = arr.toString().split('').map(Number);
let temp = 0;
for (let i = 0; i < arr.length - 1; i++) {
    for  (let j = 0; j < arr.length - i - 1; j++) {
        if (arr[j] < arr[j+1]) {
            temp = arr[j];
            arr[j] = arr[j+1];
            arr[j+1] = temp;
        }
    }
}
    console.log(parseInt(arr.join('')));
