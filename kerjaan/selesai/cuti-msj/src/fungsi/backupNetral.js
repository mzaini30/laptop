export default function (state, filename){
	const blob = new Blob(
        // [JSON.stringify(state, null, 2)], 
        [state], 
        {
    // type: 'application/json',
    type: 'text/plain;charset=utf-8',
  });
  const url = URL.createObjectURL(blob)

	const a = document.createElement('a')
	a.href = url
	a.download = filename
	a.click()
}