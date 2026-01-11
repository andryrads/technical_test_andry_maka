# Technical Test MAKA - Andry Rachdian Sumardi

## Tech Stack
- Laravel
- PostgreSQL

## LIST API ENDPOINTS

### 1. List Users
```
GET /users
```

#### Query Params
| Param | Description |
|---|---|
| search | Cari berdasarkan name atau address |
| per_page | Jumlah data per halaman |


### 2. Create User
```
POST /users
```

**Body: multipart/form-data**

| Field | Type |
|---|---|
| name | Text |
| address | Text | 
| image | File | 


### 3. Update User
```
POST /users/{id}
```

### 4. Delete User (Soft Delete)
```
DELETE /users/{id}
```

---

- Untuk Soal no 1 gunakan endpoint : 
```
GET /api/maka
```
- Untuk Soal no 2 gunakan endpoint di webview : 
```
/pyramid
```
