

# Vampir Koylu API
Vampir Koylu API is an API for describing the roles of a game called Vampir Koylu (Vampire-Villager).



## Technologies


**PHP**\
**MySQL** 

  
## Role Structure
There are total 17 roles and 3 classes in this game. The classes are Villagers, Vampires, and Neutrals.
```json
{
    "id": "13",
    "name": "Amnesiac",
    "description": "Rolü yoktur, ölen bir kişinin rolünü alarak oyuna devam eder. Oyunda kazanma ihtimali en yüksek olan rollerden birisidir. Amacınız eşitliği sağlamak değil eşitsizliği sağlamak olmalı. Güçlü olan tarafa geçin.",
    "class": "Neutral"
}
```

  
## API Usage

#### Read all roles

```http
  GET vampirkoylu_api/api/read.php
```

| Parameter | Type     | Description                |
| :-------- | :------- | :-------------------------------- |
| `-`      | `-` | - |


#### Read a role by its id

```http
  GET vampirkoylu_api/api/read_by_id.php?id={id}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :-------------------------------- |
| `id`      | `number` | ID of the role. |


#### Read a role by its class

```http
  GET vampirkoylu_api/api/read_by_class?class={class}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :-------------------------------- |
| `class`      | `string` | Class of the role. |

## References

[Data Source](https://www.wasdzone.com/vampir-koylu-rolleri/)
