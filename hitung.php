
<form name='autoSumForm' >
<table border='0' width='80%'  align='center' >
<tr>
<td><b>Angsuran Pokok</b> </td>
<td><input type='text' name='angsuran_pokok' style="text-align:right;"  size='23'   onFocus="startCalc();" onBlur="stopCalc();" /></td>
</tr>
<tr>
<td><b>Angsuran Bunga</b> </td>
<td><input type='text' name='angsuran_bunga'  style="text-align:right;"  size='23'   onFocus="startCalc();" onBlur="stopCalc();" /></td>
</tr>
<tr>
<td><b>Discount Angsuran</b> </td>
<td><input type='text' name="diskon"  style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();"  /></td>
</tr>
<tr>
<td>Jumlah</td>
<td><input readonly type=text value='0' name="jumlah" onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
</tr>
<tr><td colspan='2'>
</td></tr>
</table>
</form>

<script><!--

function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
one = document.autoSumForm.angsuran_pokok.value;
two = document.autoSumForm.angsuran_bunga.value;
three = document.autoSumForm.diskon.value;
document.autoSumForm.jumlah.value = (one * 1) + (two * 1) - (three * 1);}
function stopCalc(){
clearInterval(interval);}
</script>
