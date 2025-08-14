  <style>
      .button-add {
          color: white;
          background-color: #28a745;
          padding: 4px 8px;
          border-radius: 4px;
          font-size: 1rem;
      }

      .button-add:hover {
          background-color: #218838;
          color: white;
          text-decoration: none;
      }

      .button-delete {
          color: white;
          background-color: #dc3545;
          padding: 4px 8px;
          border-radius: 4px;
          font-size: 1rem;
      }

      .button-delete:hover {
          background-color: #c82333;
          color: white;
          text-decoration: none;
      }

      .button-edit {
          color: white;
          background-color: #fd7e14;
          padding: 4px 8px;
          border-radius: 4px;
          font-size: 1rem;
      }

      .button-edit:hover {
          background-color: #e67e22;
          color: white;
          text-decoration: none;
      }

      .table thead th {
          background-color: #4e73df;
          font-weight: bold;
          color: white;
      }

      .container-table {
          justify-self: center;
          width: 96%;
          padding: 20px;
          background-color: white;
          border-radius: 10px;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
          margin: 20px auto;
      }

      .profile-info {
          display: flex;
          flex-direction: column;
          margin-bottom: 10px;
      }

      .wrap {
          display: flex;
          margin-bottom: 10px;
      }

      .box {
          width: 50%;
      }

      .profile-card {
          max-width: 400px;
          flex-shrink: 0;
          margin-right: 20px;
      }

      .d-flex {
          align-items: stretch;
      }

      .card {
          height: 300px;
      }

      .edit-profile {
          max-height: fit-content;
      }

      body {
          background: #f8f9fc;
          font-family: Arial, sans-serif;
      }

      .form-container {
          max-width: 900px;
          margin: 50px auto;
          background: #fff;
          padding: 40px;
          border-radius: 15px;
          box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      }

      .form-container h2 {
          display: flex;
          align-self: center;
          font-size: 26px;
          color: #4e73df;
          font-weight: bold;
      }

      .section-title {
          font-size: 18px;
          font-weight: bold;
          color: #5a5c69;
          margin-bottom: 15px;
          display: flex;
          align-items: center;
      }

      .section-title i {
          margin-right: 8px;
          color: #858796;
      }

      .form-row {
          display: flex;
          gap: 15px;
          margin-bottom: 15px;
      }

      .form-row input,
      .form-row textarea {
          flex: 1;
          padding: 10px 14px;
          border: 1px solid #d1d3e2;
          border-radius: 6px;
          font-size: 14px;
          background-color: #fff;
      }

      .form-row input:focus,
      .form-row textarea:focus {
          outline: none;
          border-color: #4e73df;
          box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
      }

      textarea {
          resize: none;
          min-height: 80px;
      }

      .btn-submit {
          background-color: #4e73df;
          border: none;
          padding: 10px 20px;
          border-radius: 6px;
          color: white;
          font-weight: bold;
          cursor: pointer;
          font-size: 14px;
      }

      .btn-submit:hover {
          background-color: #2e59d9;
      }

      .form-header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 10px 0;

      }

      button {
          border: none;
          outline: none;
      }

      button:focus {
          outline: none !important;
          box-shadow: none !important;
      }

      .close:focus {
          outline: none !important;
          box-shadow: none !important;
      }
  </style>