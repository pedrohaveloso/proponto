export class ClientModel {
  constructor(
    id: number,
    name: string,
    email: string,
    birth: string,
    phone: string,
    group: string,
  ) {
    this.id = id;
    this.name = name;
    this.email = email;
    this.birth = birth;
    this.phone = phone;
    this.group = group;
  }

  public id: number;
  public name: string;
  public email: string;
  public birth: string;
  public phone: string;
  public group: string;
}