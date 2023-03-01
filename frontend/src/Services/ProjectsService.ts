import api from "./api";
import { IProject } from "../@types/project";
import { AxiosResponse } from "axios";

interface IResponse {
  status: boolean;
  message: string;
  data: IProject[];
}

class ProjectsService {
  async fetchAll(): Promise<AxiosResponse<IResponse>> {
    return await api.get("/projects");
  }
}

export default new ProjectsService();
