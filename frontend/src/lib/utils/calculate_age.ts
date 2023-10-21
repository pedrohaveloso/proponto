export function calculateAge(birth: string) {
  var ageDifMs = Date.now() - Date.parse(birth);
  var ageDate = new Date(ageDifMs);
  return Math.abs(ageDate.getUTCFullYear() - 1970);
}